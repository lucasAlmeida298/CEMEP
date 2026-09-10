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
        return getPreco() * 0.80;
    }

    @Override
    public String toString() {
        return super.toString();
    }
}
