public class Novo extends Imovel {
    private int anoDeConstrucao;

    public Novo(String tipo, String endereco, int preco, int anoDeConstrucao) {
        super(tipo, endereco, preco);
        this.anoDeConstrucao = anoDeConstrucao;
    }

    public int getAnoDeConstrucao() {
        return anoDeConstrucao;
    }

    public void setAnoDeConstrucao(int anoDeConstrucao) {
        this.anoDeConstrucao = anoDeConstrucao;
    }
}
