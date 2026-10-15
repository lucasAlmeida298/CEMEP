public class ValorNulo {
    public static void main(String[] args) {
        String frase = null;
        String novaFrase = null;
        try {
            novaFrase = frase.toUpperCase();
        }
        catch (NullPointerException e){
            System.out.println("Uma variável não pode ter valor nulo.");
            System.out.println("Erro: " +e.getMessage());
            frase = "frase padrão";
        }
        finally {
            novaFrase = frase.toUpperCase();
        }
        System.out.println("Frase antigo: "+frase);
        System.out.println("Frase nova: "+novaFrase);
    }
}
