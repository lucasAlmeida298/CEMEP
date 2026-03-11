// Programa desenvolvido por Lucas Almeida e João Vitor - 1ºAno W
#include <stdio.h>
#include <locale.h>

int main() {
    setlocale(LC_ALL, "Portuguese");

    int A, B, C, D, E, F, G, H;

    printf("1 - Arquitetura\n2 - Filosofia\n3 - Mitologia\n");
    printf("Digite o número correspondente ao tema que você deseja conhecer: ");
    scanf("%i", &A);

    if (A == 1 || A == 2) {
        printf("Outro grupo está trabalhando nesse tema!\n");
    } else if (A == 3) {
        printf("Você escolheu Mitologia!\n1 - Deuses\n2 - Criaturas Mitológicas\n3 - Heróis\n");
        printf("Digite o número correspondente à categoria que você deseja se aprofundar: ");
        scanf("%i", &B);

        if (B == 1) {
            printf("Você escolheu Deuses!\n");
            printf("Os deuses gregos são entidades mitológicas que governam\n");
            printf("diferentes aspectos da vida e da natureza, como Zeus,\ndeus dos céus, e Poseidon, deus dos mares. Eles eram\n");
            printf("adorados pelos antigos gregos e tinham personalidades\n");
            printf("e histórias fascinantes.\n");

            printf("1 - Sim\n2 - Não\nVocê deseja saber mais?\n");
            scanf("%i", &C);

            if (C==1) {
                printf("Os deuses gregos formam um panteão complexo e antropomórfico, com características humanas e poderes sobrenaturais. Os principais são os doze do Olimpo, liderados por Zeus, deus do céu e do trovão. Hera, sua esposa, é deusa do casamento; Poseidon, deus dos mares; Atena, da sabedoria; Apolo, do sol e das artes; Ártemis, da caça; Ares, da guerra; Afrodite, do amor; Hermes, mensageiro e deus do comércio; Hefesto, do fogo e da metalurgia; Deméter, da agricultura; e Dionísio, do vinho e das festas. Além deles, destacam-se Hades, deus do submundo, e Héstia, deusa do lar. Esses deuses influenciavam a vida dos mortais e protagonizavam mitos que explicavam desde fenômenos naturais até valores morais e sociais. A mitologia grega é marcada por rivalidades, paixões, justiça e poder, refletindo a visão dos antigos gregos sobre o mundo e a condição humana.\n");
            	printf("1 - Sim\n2 - Não\nVocê deseja saber mais informações?\n");
            	scanf("%i", &F);

			}
            	else if(C==2){
            		printf("As informações são essas! Obrigado pela presença...\n");
            }
            	else {
			
           		printf("Operação inválida!\n"); 	
           	
			}

            	if (F == 1) {
                printf("Chame o professor Cantalogo ou o Wagner para melhor obtenção de informações.\n");
                 } else if (F == 2) {
                printf("As informações são essas! Obrigado pela presença...\n");
              } else {
                 printf("9 inválida!\n");
             }
        	 }	else if (B == 2) {
            printf("Você escolheu Criaturas!\n");
            printf("As criaturas mitológicas gregas são seres fantásticos que habitam lendas e mitos, como o poderoso Minotauro, a sedutora Medusa e o feroz Cérbero, refletindo medos, desejos e valores da cultura antiga.\n");

            printf("1 - Sim\n2 - Não\nVocê deseja saber mais?\n");
            scanf("%i", &D);}

            if (D == 1) {
                printf("As criaturas mitológicas gregas são tão fascinantes quanto os próprios deuses, e carregam significados profundos dentro dos mitos. A Quimera, por exemplo, era um monstro aterrorizante com corpo de leão, uma cabeça de cabra nas costas e uma cauda em forma de serpente, além de cuspir fogo. Ela representava o caos e o perigo, sendo derrotada por Belerofonte montado no cavalo alado Pégaso. Já o Cérbero era o cão de três cabeças que guardava a entrada do submundo, impedindo que os mortos saíssem. Era fiel a Hades, senhor dos mortos, e uma das tarefas de Hércules foi capturá-lo vivo.\n");

                printf("1 - Sim\n2 - Não\nVocê deseja saber mais?\n");
                scanf("%i", &G);

                if (G == 1) {
                    printf("Chame o professor Cantalogo ou o Wagner para melhor obtenção de informações.\n");
                } else if (G == 2) {
                    printf("As informações são essas! Obrigado pela presença...\n");
             } else {
                    printf("Operação inválida!\n");
                }
             } else if (D == 2) {
                printf("As informações são essas! Obrigado pela presença...\n");
          } else {
                printf("Operação inválida!\n");
            }

            } else if (B == 3) {
            printf("Você escolheu Heróis!\n");
            printf("Os heróis mitológicos gregos são figuras lendárias que enfrentam desafios épicos, como Hércules e suas doze tarefas ou Perseu derrotando a Medusa, representando coragem, astúcia e força na cultura grega.\n");

            printf("1 - Sim\n2 - Não\nVocê deseja saber mais?\n");
            scanf("%i", &E);

                if (E == 1) {
                printf("Um dos heróis mais famosos é Hércules (ou Heracles), conhecido por sua força extraordinária. Filho de Zeus com uma mortal, foi perseguido por Hera, que o levou à loucura. Como penitência, realizou os Doze Trabalhos, feitos quase impossíveis, como matar o Leão de Neméia, capturar o javali de Erimanto e trazer o cão Cérbero do submundo. Teseu, outro herói importante, é lembrado por ter derrotado o Minotauro no labirinto de Creta, usando apenas um fio para sair do labirinto após matar o monstro. Ele representa o herói racional e estrategista.\n");
                printf("1 - Sim\n2 - Não\nVocê deseja saber mais?\n");
                scanf("%i", &H);
                    if(H==1){
                         printf("Chame o professor Cantalogo ou o Wagner para melhor obtenção de informações.\n");
                     }
                         else if(H==2){
                            printf("As informações são essas! Obrigado pela presença...\n");
                    }
                     else{
                printf(" inválida!\n");}
          }      	 else if (E == 2) {
            			 printf("As informações são essas! Obrigado pela presença...\n");
         	 } else {
                printf("Operação inválida!\n");
            }
         }else {
            printf("Operação inválida!\n");
        }
    
	}else{
	
        printf("Dado inválido!\n");
    	}
     
