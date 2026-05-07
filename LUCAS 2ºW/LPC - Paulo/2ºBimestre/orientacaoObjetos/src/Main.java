public class Main {

    public static void main(String[] args) {

        Carro carro1 = new Carro("Fusca", "Azul bebê", 90.0);

        /*
        carro1.modelo = "Fusca";
        carro1.cor = "Azul bebê";
        carro1.velocidadeMaxima = 90.0; */

        Carro carro2 = new Carro("Uno com escada", "Cinza", 500.0);
        /*
        carro2.modelo = "Uno com escada";
        carro2.cor = "Cinza empoeirado";
        carro2.velocidadeMaxima = 500.0;  */

        Onibus onibus1 = new Onibus("LiraBus", 63);
        Onibus onibus2 = new Onibus("Mercedes", 72);
        Onibus onibus3 = new Onibus("Caio", 59);

        System.out.println("O " + carro1.modelo + " é " + carro1.cor + " e anda a " + carro1.velocidadeMaxima + "KM");
        System.out.println("O " + carro2.modelo + " é " + carro2.cor + " e anda a " + carro2.velocidadeMaxima + "KM");

        carro1.acelerar();
        carro2.acelerar();

        System.out.println("A marca do primeiro onibus é " + onibus1.empresa + " e tem capacidade pra " + onibus1.quantPassageiros + " passageiros");
        System.out.println("A marca do primeiro onibus é " + onibus2.empresa + " e tem capacidade pra " + onibus2.quantPassageiros + " passageiros");
        System.out.println("A marca do primeiro onibus é " + onibus3.empresa + " e tem capacidade pra " + onibus3.quantPassageiros + " passageiros");

        System.out.println(toStr);
    }
}