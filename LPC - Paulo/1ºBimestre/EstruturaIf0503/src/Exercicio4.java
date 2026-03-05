import java.util.Scanner;

public class Exercicio4 {
    public static void main(String[] args){
        float x, y;

        Scanner scanner = new Scanner(System.in);
        System.out.println("Digite o X de sua coordenada: ");
        x = scanner.nextFloat();

        System.out.println("Digite o y de sua coordenada: ");
        y = scanner.nextFloat();

        if (x==0 && y==0) {
            System.out.println("Sua coordenada se encontra na origem do plano");
        } else if (x==0 && y>0) {
            System.out.println("Você está no eixo Y positivo");
        } else if (x>0 && y==0) {
            System.out.println("Você está no eixo X positivo");
        } else if (x==0 && y<0) {
            System.out.println("Você está no eixo Y negativo");
        } else if (x<0 && y==0) {
            System.out.println("Você está no eixo X negativo");
        } else if (x>0 && y>0) {
            System.out.println("Você está no quadrante 1");
        } else if (x>0 && y<0) {
            System.out.println("Você está no quadrante 4");
        } else if (x<0 && y>0) {
            System.out.println("Você está no quadrante 2");
        } else if (x<0 && y<0) {
            System.out.println("Você está no quadrante 3");
        }
    }
}
