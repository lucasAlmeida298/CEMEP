public class Aluno extends Pessoa{

    private  int matricula;

    public Aluno (String nome, String cidade, int matricula){
        super(nome,cidade);
        this.matricula = matricula;
    }

    public int getMatricula() {
        return matricula;
    }

    public void setMatricula(int matricula) {
        this.matricula = matricula;
    }

    public void verNotas(){
        System.out.println("O aluno está conferindo as notas");
    }
    public void verNotas(String disciplina){
        System.out.println("O aluno " + getNome() +" está conferindo as notas de "+ disciplina);
    }
}
