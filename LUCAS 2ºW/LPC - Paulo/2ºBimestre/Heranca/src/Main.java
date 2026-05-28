public class Main {

    public static void main(String[] args) {

        Pessoa pessoa = new Pessoa("Kaike","Pindmonhagaba");
        Aluno aluno = new Aluno("José", "Paraíba",123);
        Professor professor = new Professor("Paulo", "Dois córregos",44);

        aluno.setNome("João");

        System.out.println(aluno.getNome());

        aluno.verNotas();
        aluno.verNotas("História");
    }
}
