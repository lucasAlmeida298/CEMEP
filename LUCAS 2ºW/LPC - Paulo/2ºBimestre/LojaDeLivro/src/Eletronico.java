public class Eletronico extends Produtos {

    private int garantia;

    public Eletronico(String nome, double preco, String descricao, int garantia) {
        super(nome, preco, descricao);
        this.garantia = garantia;
    }

    public int getGarantia() {
        return garantia;
    }

    public void setGarantia(int garantia) {
        this.garantia = garantia;
    }

    public double imposto (){
        super.setPreco(getPreco()*1.40);
        return getPreco();
    }


    @Override
    public String toString() {
        return super.toString() + "\nPreço: " + imposto() + "R$\nDescrição: " + getDescricao() +
                "\nGarantia: " + getGarantia() +" dias";
    }
}
