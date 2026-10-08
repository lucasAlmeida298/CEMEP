import java.util.ArrayList;
import java.util.Arrays;
public class Main2 {
    public static void main(String[] args) {
        ArrayList<String> lista = new ArrayList<>();
        lista.add("Banana");
        lista.add("Uva");
        lista.add("Manga");
        lista.add("Morango");

        System.out.println("Exibir usando FOR");
        for (int i = 0; i < lista.size(); i++){
            System.out.println("Fruta: " + lista.get(i));
        }

        //add insere um valor no final da lista ou em posição específica
        lista.add("Melancia");
        lista.add(2,"Jabuticaba");

        //mudar um valor
        lista.set(0,"Romã");

        //remover um item da lista
        lista.remove(2);

        System.out.println("Exibir usando FOREACH");
        for (String fruta: lista){
            System.out.println(fruta);
        }

        //verifica se está vazio
        boolean vazio = lista.isEmpty();
        System.out.println("Vazio? " + vazio);
    }
}
