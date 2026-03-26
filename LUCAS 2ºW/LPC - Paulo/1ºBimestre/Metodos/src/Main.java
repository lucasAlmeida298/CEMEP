import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        saudacao("Lucas");
        String aluno=msgsaudacao("Sofiiiii");
    } //Fim do método main
    public static void saudacao(String nome){
        System.out.println("Boa tarde "+ nome);
    }
    public static String msgsaudacao(String nome){
        return "Olá "+ nome;
    }
}
