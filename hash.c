#include<stdio.h>
#include<stdlib.h>

//2*15= 30 NUMERO primo = 31
#define TAM 31

int funcaoHash(int chave){

    return chave % TAM;
}


void inicializarTabela(int t[]){
	int i;
	for(i=0; i<TAM; i++){
			t[i] = 0;
}
}


void inserirTabela(int t[], int valor){
	
		int id = funcaoHash(valor);
		//if(t[id]!= null)
			while(t[id]!=0){
				id= funcaoHash(id+ 1);
			}
		
		t[id] = valor;
		
	
		
}

int busca(int t[], int valor){
			int id = funcaoHash(valor);
			printf("\nIndice gerado: %d\n ", id);
			
			while(t[id] != 0){
				if(t[id] == valor){
				return t[id];
			}else{
				id = funcaoHash(id+1);
				
			}
			return 0;
}
}

void imprimir(int t[]){
		int i;
		for(i=0; i<TAM;i++){
				printf("%d = %d \n", i, t[i]);
				
			
		}
		
}

void main(){
	int tabela[TAM];
	
	inicializarTabela(tabela);

    inserirTabela(tabela, 235);
	inserirTabela(tabela, 12);
	inserirTabela(tabela, 1068);
	inserirTabela(tabela, 42);
	inserirTabela(tabela, 5);
	
	
	imprimir(tabela);


	
}
