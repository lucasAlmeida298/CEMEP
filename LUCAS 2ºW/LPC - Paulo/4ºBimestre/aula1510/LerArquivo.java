import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class LerArquivo {
    public static void main(String[] args) throws IOException {

        try {
            //Acessa o arquvo TXT
            FileReader fileReader = new FileReader("src/teste.txt");
            BufferedReader buffer = new BufferedReader(fileReader);

            for (int i = 0; i < 10; i++) {
                System.out.println("Linha: " + (i + 1) + ": " + buffer.readLine());
            }
        } catch (IOException e) {
            System.out.println("Falha ao acessar dados");
            System.out.println(e.getMessage());
        }
    }
}
