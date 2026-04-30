public class Conveter {
    public double convertDolar (double a){
        return a/4.98;
    }
    public double convertEuro (double a){
        return a/5.84;
    }
    public double convertIene (double a){
        return a/0.032;
    }
    public double convesorGeral(double valorReais, int opcao){
        double valorConvertido=0;
        if(opcao==1){
            valorConvertido=valorReais/4.98;
        }
        else if (opcao==2){
            valorConvertido=valorReais/5.84;
        }
        else if (opcao==3){
            valorConvertido=valorReais/0.032;
        }

        return valorConvertido;

  }
}