import java.util.Scanner;

public class Exercicio4W {
    public static void main(String[] args){
        int a, b, c, x, y, z;
        Scanner num = new Scanner(System.in);
        System.out.println("Digite 3 números inteiros: ");
        a = num.nextInt();
        b = num.nextInt();
        c = num.nextInt();
        x = a * b;
        y = b * c;
        z = c * a;
        System.out.println(a + " X "+ b +" = " + x);
        System.out.println(b + " X "+ c +" = " + y);
        System.out.println(c + " X "+ a +" = " + z);
    }
}
