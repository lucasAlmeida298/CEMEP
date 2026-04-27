import java.util.Scanner;

public class Exercicio2 {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int A=0, B=0, i=1, opcao=0;
        System.out.println("Opção 1: Incrementa a variável A em 1 unidade.");
        System.out.println("Opção 2: Incrementa a variável A em 2 unidades.");
        System.out.println("Opção 3: Decrementa a variável A em 1 unidade.");
        System.out.println("Opção 4: Incrementa a variável B em 1 unidade.");
        System.out.println("Opção 5: Incrementa a variável B em 2 unidades.");
        System.out.println("Opção 6: Decrementa a variável B em 1 unidade.");
        while (i>0) {
            System.out.println("Qual opção você escolhe?: ");
            opcao = in.nextInt();
            if (opcao==1) {
                A=A+1; }
            else if (opcao==2) {
                A=A+2; }
            else if (opcao==3) {
                A=A-1; }
            else if (opcao==4) {
                B=B+1; }
            else if (opcao==5) {
                B=B+2; }
            else if (opcao==6) {
                B=B-1; }
            else {
                System.out.println("Dado inválido! Nada acontece!"); }
            System.out.println("Deseja continuar?(1-Sim 0-Não): ");
            i = in.nextInt();
        }
        System.out.println("A="+ A +" B="+ B);
    }
}
