import java.util.Arrays;
public class Main {
    public static void main(String[] args) {
        int[] num = {4,2,10,6,7,23,17,88,1,1,21};

        //toString exibe os dados em formato texto
        System.out.println("Array original: "+ Arrays.toString((num)));

        //sort ordena um array
        Arrays.sort(num);
        System.out.println("Array Ordenado: " + Arrays.toString(num));

        //busca binária (o array precisa estar ordenado)
        int indice = Arrays.binarySearch(num,23);
        System.out.println("O número 23 está no índice: "+ indice);

        //copia arrays
        int[] novo = Arrays.copyOf(num, 10);
        System.out.println("Original: " + Arrays.toString(num));
        System.out.println("Novo: " + Arrays.toString(novo));

        //compara se são iguais
        boolean iguais = Arrays.equals(num,novo);
        System.out.println("São iguais? " + iguais);

        //cópia de uma parte qualquer
        int[] novaCopia = Arrays.copyOfRange(num,4,8);
        System.out.println("Original: " + Arrays.toString(num));
        System.out.println("Cópia: " + Arrays.toString(novaCopia));

        //preencher um Array com valor padrão
        int[] preenchido = new int[5];
        Arrays.fill(preenchido, 1000);
        System.out.println("Preenchido: "+Arrays.toString(preenchido));
    }
}