public class Novo extends Imovel {
    private String nomeConstrutora;

    public Novo (int tipo, String endereco, double preco, String nomeConstrutora) {
        super(tipo,endereco,preco);
        this.nomeConstrutora = nomeConstrutora;
    }

    public String getNomeConstrutora() {
        return nomeConstrutora;
    }

    public void setNomeConstrutora(String nomeConstrutora) {
        this.nomeConstrutora = nomeConstrutora;
    }

    public double calculoAdicional () {
        super.setPreco(getPreco()*1.40);
        return getPreco() ;
    }

    @Override
    public String toString() {
        return super.toString() + calculoAdicional() + "\nA construtora do imóvel é: " + getNomeConstrutora();
    }
}
