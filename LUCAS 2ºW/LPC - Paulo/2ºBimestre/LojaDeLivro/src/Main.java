public class Main {
    public static void main(String[] args) {

        Eletronico eletronico = new Eletronico("iPhone 17",50,"iPhone 17 lacrado com carregador",183);
        Livro livro = new Livro("O ladrão de Raios",23,"Livro que mostra os primeiros passos de Percy","Rick Riordan");

        eletronico.setPreco(100);
        eletronico.setPreco(20,true);
        livro.setPreco(30);
        livro.setPreco(50,true);

        System.out.println("--------Eletrônico--------");
        System.out.println(eletronico.toString());

        System.out.println("----------Livro----------");
        System.out.println(livro.toString());


    }
}
