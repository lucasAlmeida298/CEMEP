public class Produtos {

    private String nome;
    private double preco;
    private String descricao;

    public Produtos(String nome, double preco, String descricao) {
        this.nome = nome;
        this.preco = preco;
        this.descricao = descricao;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public double getPreco() {
        return preco;
    }

    public void setPreco(double preco) {
        this.preco = preco;
    }

    public void setPreco(double percentual, boolean aumentar) {
        if (aumentar=true) {
            setPreco(getPreco()+(preco*(percentual/100)));
        }
        else {
            setPreco(getPreco()-(preco*(percentual/100)));
        }
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }



    @Override
    public String toString() {
        return "O nome do produto é: " + nome;
    }
}
