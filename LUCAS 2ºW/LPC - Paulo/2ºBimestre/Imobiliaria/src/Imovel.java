public class Imovel {
    private String tipo;
    private String endereco;
    private int preco;

    public Imovel(String tipo, String endereco, int preco) {
        this.tipo = tipo;
        this.endereco = endereco;
        this.preco = preco;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public int getPreco() {
        return preco;
    }

    public void setPreco(int preco) {
        this.preco = preco;
    }

    @Override
    public String toString() {
        return "Imovel{" +
                "tipo='" + tipo + '\'' +
                ", endereco='" + endereco + '\'' +
                ", preco=" + preco +
                '}';
    }
}
