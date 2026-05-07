public class Carro {

    String modelo;
    String cor;
    double velocidadeMaxima;

    // método construtor
    public Carro(String modelo, String cor, double velocidadeMaxima){
        this.modelo = modelo;
        this.cor = cor;
        this.velocidadeMaxima = velocidadeMaxima;
    }

    public void acelerar(){
        System.out.println(modelo + " está acelerando");
    }
    public void frear(){
        System.out.println(modelo + " está freando");
    }

    @Override
    public String toString() {
        return "Carro: " + this.modelo
                + "\nCor: " + this.cor
                + "\nVelocidade Máxima: " + this.velocidadeMaxima;
    }
}
