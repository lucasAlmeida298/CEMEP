import javax.swing.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.Scanner;

public class InserindoNoBD {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        System.out.println("Digite nome: ");
        String nome = in.nextLine();
        System.out.println("Digite cidade: ");
        String cidade = in.nextLine();

        try {
            Connection conexao = DriverManager
                    .getConnection("jdbc:mysql://localhost/lpc2w",
                            "root", "");
            System.out.println("Está conectado!");

            String sql = "INSERT INTO alunos (nome,cidade) VALUES ('"+nome+"','"+cidade+"')";

            PreparedStatement pstm = conexao.prepareStatement(sql);
            pstm.execute();
            pstm.close();
            conexao.close();

        } catch (SQLException e) {
            System.out.println("Erro" + e.getMessage());
        }
    }
}
