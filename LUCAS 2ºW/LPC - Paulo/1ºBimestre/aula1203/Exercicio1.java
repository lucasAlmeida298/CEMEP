import java.util.Scanner;

public class Exercicio1 {
    public static void main(String[] arg){
        int i;
        Scanner in = new Scanner(System.in);
        System.out.println("Digite o número que deseja ver a tabuada: ");
        int n = in.nextInt();
        for (i=1; i<=10; i++) {
            int r = n*i;
            System.out.println(n +"X"+ i +"="+ r);
        }
    }
}
