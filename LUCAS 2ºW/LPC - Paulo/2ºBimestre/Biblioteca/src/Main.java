public class Main {
    public static void main(String[] args) {
        Livro obj1Livro = new Livro("Java é para os fortes", "Paulo LPC", 721);
        Livro obj2Livro = new Livro("O tapir tá on", "Saymon", 492);

        obj1Livro.setNome("C++");

        /*obj1Livro.nome = "Java é para os fortes";
        obj1Livro.autor = "Paulo LPC";
        obj1Livro.numeroPaginas = 721;
        obj2Livro.nome = "O tapir tá on";
        obj2Livro.autor = "Saymon";
        obj2Livro.numeroPaginas = 492;*/

        //obj1Livro.mostraLivro();

        System.out.println("-----------------------------------------");
        System.out.println(obj1Livro.toString());
        System.out.println("-----------------------------------------");
        System.out.println(obj2Livro);


    }
}
