public class Usado extends Imovel {
    private int anoConstrucao;

    public Usado (int tipo, String endereco, double preco, int anoConstrucao) {
        super(tipo,endereco,preco);
        this.anoConstrucao = anoConstrucao;
    }

    public int getAnoConstrucao() {
        return anoConstrucao;
    }

    public void setAnoConstrucao(int anoConstrucao) {
        this.anoConstrucao = anoConstrucao;
    }

    public double calcularDesconto (){
        super.setPreco(getPreco()*0.80);
        return getPreco();
    }

    @Override
    public String toString() {
        return super.toString() + calcularDesconto() + "\nO ano de construção do imóvel é: " + getAnoConstrucao();
    }
}
