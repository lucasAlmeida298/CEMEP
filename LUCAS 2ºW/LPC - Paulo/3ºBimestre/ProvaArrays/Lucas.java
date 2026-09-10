import java.util.Scanner;

public class Lucas {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        int i;
        int[] temperaturas = new int[7];
        String[] diasSemana = {"Domingo", "Segunda", "Terça", "Quarta", "Quinta",
        "Sexta", "Sábado", "Domingo"};
        int acumTemp=0;
        int maiorTemp=0;
        int menorTemp=99999999;
        int acimaMedia=0;
        double media;
        String diaMaiorTemp="";
        String diaMenorTemp="";


        for(i=0;i<temperaturas.length;i++) {
            System.out.println("Digite a temperatura de " + diasSemana[i] + ": ");
            temperaturas[i] = in.nextInt();

            acumTemp+=temperaturas[i];

            if (temperaturas[i]>maiorTemp) {
                maiorTemp=temperaturas[i];
                diaMaiorTemp = diasSemana[i];
            }

            if (temperaturas[i]<menorTemp) {
                menorTemp=temperaturas[i];
                diaMenorTemp = diasSemana[i];
            }
        }

        media=acumTemp/temperaturas.length;

        System.out.println("\nA média das temperaturas é " + (acumTemp/temperaturas.length) + "ºC");

        for (i=0;i<temperaturas.length;i++) {
            if (temperaturas[i]>media) {
                acimaMedia+=1;
            }
        }

        System.out.println("A semana teve " + acimaMedia + " dias com temperaturas acima da média");
        System.out.println("A maior temperatura  foi " + maiorTemp + "ºC e a menor" +
                " foi " + menorTemp + "ºC");
        System.out.println("O dia com maior temperatura foi " + diaMaiorTemp + " e a menor" +
                " foi "+ diaMenorTemp);
    }
}
