public class Imovel {
    private int tipo;
    private String endereco;
    private double preco;

    public Imovel (int tipo, String endereco, double preco) {
        this.tipo = tipo;
        this.endereco = endereco;
        this.preco = preco;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public double getPreco() {
        return preco;
    }

    public void setPreco(double preco) {
        this.preco = preco;
    }

    public int getTipo() {
        return tipo;
    }

    public void setTipo(int tipo) {
        this.tipo = tipo;
    }

    @Override
    public String toString () {
        return "O imóvel está localizado em: " + endereco + "\nO preço do imóvel é de: ";
    }
}
