import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        Novo novo = new Novo(1,"Rua 1",100,"Romualdo");
        Usado usado = new Usado(2,"Rua 2",100,2010);
        System.out.println("Digite 1 se deseja o usado ou 2 se prefere o novo:");
        int opcao = in.nextInt();

        if (opcao==1) {
            System.out.println("O imóvel está localizado em " + novo.getEndereco());
            System.out.println("O preço do imóvel é de " + novo.calculoAdicional());
            System.out.println("A construtora do imóvel é " + novo.getNomeConstrutora());
        }
        else if (opcao==2) {
            System.out.println("O imóvel está localizado em " + usado.getEndereco());
            System.out.println("O preço do imóvel é de " + usado.calcularDesconto());
            System.out.println("O ano de construção do imóvel é " + usado.getAnoConstrucao());
        }
        else {
            System.out.println("DADO INVÁLIDO! Tente novamente!");
        }


    }
}
