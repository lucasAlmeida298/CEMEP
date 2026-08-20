abstract class PessoaLoja {
    protected String nome;
    protected String cpf;

    public PessoaLoja(String nome, String cpf) {
        this.nome = nome;
        this.cpf = cpf;
    }
    public abstract void exibirCadastro();
}
