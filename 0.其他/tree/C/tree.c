#include <stdio.h>
#include <stdlib.h>

#define TRUE 1
#define FALSE 0
#define OVERFLOW -2
#define OK 1
#define ERROR 0

typedef int Status;
typedef int TElemType;

typedef struct BiTNode
{
	TElemType data;
	struct BiTNode *lchild, *rchild;
}BiTNode, *BiTree;

Status CreateBiTree(BiTree *T)
{
	TElemType e;
	scanf("%d", &e);
	if(e == 0)
	{
		*T = NULL;
	} else {
		*T = (BiTree) malloc(sizeof(BiTNode));
		if(!T)
		{
			return OVERFLOW;
		}
		(*T)->data = e;
		CreateBiTree(&(*T)->lchild);
		CreateBiTree(&(*T)->rchild);
	}
	return OK;
}

void visit(TElemType e)
{
	printf("%d", e);
}

Status PreOrderTraverse(BiTree T)
{
	if(T)
	{
		visit(T->data);
		PreOrderTraverse(T->lchild);
		PreOrderTraverse(T->rchild);
	}
	return OK;
}

Status InOrderTraverse(BiTree T)
{
	if(T)
	{
		InOrderTraverse(T->lchild);
		visit(T->data);
		InOrderTraverse(T->rchild);
	}
	return OK;
}

Status PostOrderTraverse(BiTree T)
{
	if(T)
	{
		PostOrderTraverse(T->lchild);
		PostOrderTraverse(T->rchild);
		visit(T->data);
	}
	return OK;
}

int main(int argc, char *argv[]) {
	BiTree T;
	printf("创建树");
	CreateBiTree(&T);
	printf("先序遍历");
	PreOrderTraverse(T);
	printf("中序遍历");
	InOrderTraverse(T);
	printf("后序遍历");
	PostOrderTraverse(T);
}