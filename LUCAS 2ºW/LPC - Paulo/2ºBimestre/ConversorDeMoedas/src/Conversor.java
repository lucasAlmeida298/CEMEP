public class Conversor {
    public double conversor (double valor, int moeda){
        double valorConvertido=0;
        if (moeda==1){
            valorConvertido=valor/4.98;
        }
        else if (moeda==2){
            valorConvertido=valor/5.84;
        }
        else if (moeda==3){
            valorConvertido=valor/0.032;
        }
        return valorConvertido;
    }
}
