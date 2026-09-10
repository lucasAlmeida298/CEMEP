import java.util.Scanner;

public class Desafio {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        System.out.println("informe a quantidade de valores que deseja digitar: ");
        int a = in.nextInt();
        int[] vetor = new int[a];

        int i;
        double b;
        int acumNum=0;
        double novoNumero=0;
        int maior=0;
        double med;

        System.out.println("Digite um outro número");
        novoNumero = in.nextDouble();

        for(i=1;i<=vetor.length;i++){
            System.out.println("Digite o "+ (i) + "º número: ");
            b = in.nextInt();

            if(novoNumero<b){
                maior+=1;
            }
            acumNum+=b;
        }



        med = acumNum/i;
        System.out.println((i-1) + " números foram digitados");
        System.out.println("A média dos números digitados é "+ med);
        System.out.println(maior + " números são maior que "+ novoNumero);
    }
}
