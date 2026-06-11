public class Usado extends Imovel {
    private String nomeConstrutora;

    public Usado(String tipo, String endereco, int preco, String nomeConstrutora) {
        super(tipo, endereco, preco);
        this.nomeConstrutora = nomeConstrutora;
    }

    public String getNomeConstrutora() {
        return nomeConstrutora;
    }

    public void setNomeConstrutora(String nomeConstrutora) {
        this.nomeConstrutora = nomeConstrutora;
    }
}
