public class Cliente extends PessoaLoja implements Autenticavel {
    private String email;

    public Cliente(String nome, String cpf, String email) {
        super(nome, cpf);
        this.email = email;
    }


    @Override
    public void exibirCadastro() {
        System.out.println("Exibindo cadastro cliente...");
        System.out.println("Nome: " + nome + "\nCPF: " + cpf + "\nEmail: "+ email);
    }

    @Override
    public void realizarLogin() {
        System.out.println("Login cliente " + nome +" realizado!");
    }
}
