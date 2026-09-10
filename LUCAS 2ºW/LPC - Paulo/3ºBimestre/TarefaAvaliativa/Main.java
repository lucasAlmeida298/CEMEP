import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        System.out.println("------ LOJA ------");

        System.out.println("\nCadastro Cliente\nDigite o nome do cliente: ");
        String nome = in.nextLine();
        System.out.println("\nDigite o CPF do cliente: ");
        String cpf = in.nextLine();
        System.out.println("\nDigite o email do cliente: ");
        String email = in.nextLine();

        Cliente cliente = new Cliente(nome, cpf, email);

        System.out.println("\nCadastro Vendedor\nDigite o nome do vendedor: ");
        String nomeVendedor = in.nextLine();
        System.out.println("\nDigite o CPF do vendedor: ");
        String cpfVendedor = in.nextLine();
        System.out.println("\nDigite a comissão do vendedor: ");
        double comissao = in.nextDouble();

        Vendedor vendedor = new Vendedor(nomeVendedor, cpfVendedor, comissao);

        int loop = 1;
        while (loop==1) {
            System.out.println("\nDigite o número referente a opção que deseja");
            System.out.println("1. Realizar login (cliente)");
            System.out.println("2. Realizar login (vendedor)");
            System.out.println("3. Exibir cadastro (cliente)");
            System.out.println("4. Exibir cadastro (vendedor)");
            System.out.println("Digite a opção desejada: ");
            int op = in.nextInt();
            if (op == 1) {
                cliente.realizarLogin();
            } else if (op == 2) {
                vendedor.realizarLogin();
            } else if (op == 3) {
                cliente.exibirCadastro();
            } else if (op == 4) {
                vendedor.exibirCadastro();
            } else {
                System.out.println("Opção inválida!");
            }

            System.out.println("\nDeseja continuar [1-Sim/2-Não]: ");
            int option = in.nextInt();

            if (option==1) {
                loop=1;
            }
            else {
                loop=0;
            }
        }
    }
}
