public class Professor extends Pessoa {

    private int carteiraTrabalho;

    public Professor (String nome, String cidade, int carteiraTrabalho){
        super(nome,cidade);
        this.carteiraTrabalho = carteiraTrabalho;
    }
}
