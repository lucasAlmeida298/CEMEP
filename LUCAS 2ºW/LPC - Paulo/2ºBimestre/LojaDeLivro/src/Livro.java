public class Livro extends Produtos {

    private String autor;

    public Livro(String nome, double preco, String descricao, String autor) {
        super(nome, preco, descricao);
        this.autor = autor;
    }

    public String getAutor() {
        return autor;
    }

    public void setAutor(String autor) {
        this.autor = autor;
    }

    @Override
    public String toString() {
        return super.toString() + "\nPreço: " + getPreco() + "R$\nDescrição: " + getDescricao() +
                "\nAutor: " + getAutor();
    }
}
