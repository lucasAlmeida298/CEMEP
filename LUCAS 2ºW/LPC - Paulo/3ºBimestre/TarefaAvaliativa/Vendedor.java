public class Vendedor extends PessoaLoja implements Autenticavel {
    private double comissao;

    public Vendedor(String nome, String cpf, double comissao) {
        super(nome, cpf);
        this.comissao = comissao;
    }

    @Override
    public void exibirCadastro(){
        System.out.println("Exibindo cadastro vendedor...");
        System.out.println("Nome: "+ nome + "\nCPF: " + cpf + "\nComissão: " + comissao);
    }

    @Override
    public void realizarLogin() {
        System.out.println("Login vendedor " + nome +" realizado!");
    }
}
