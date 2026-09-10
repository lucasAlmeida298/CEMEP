public class Livro {
    //método atributos
    private String nome;
    private String autor;
    private int numeroPaginas;

    //método construtor
    public Livro (String nome, String autor, int numeroPaginas) {
        this.nome = nome;
        this.autor = autor;
        this.numeroPaginas = numeroPaginas;
    }

    public void mostraLivro (){
        System.out.println("Livro: "+ this.nome);
    }

    @Override
    public String toString() {
        return "Nome: "+ this.nome +"\nAutor: "+ this.autor +"\nNúmero de páginas: "+ this.numeroPaginas;
    }

    public Livro(){

    }
    public String getNome(){
        return this.nome;
    }
    public String getAutor(){
        return this.autor;
    }
    public int getNumeroPaginas(){
        return this.numeroPaginas;
    }

    public void setNome(String nome){
        this.nome=nome;
    }
    public void setAutor(String autor){
        this.autor=autor;
    }
    public void setNumeroPaginas(int numeroPaginas){
        this.numeroPaginas=numeroPaginas;
    }
}
