public class Midia {
    private String nome;
    private String genero;
    private String atorPrincipal;
    private int classificacaoIndicativa;
    private String tipo;

    public Midia (String nome, String genero, String atorPrincipal,
                  int classificacaoIndicativa, String tipo) {
        this.nome=nome;
        this.genero=genero;
        this.atorPrincipal=atorPrincipal;
        this.classificacaoIndicativa=classificacaoIndicativa;
        this.tipo=tipo;
    }

    @Override
    public String toString() {
        return "Nome: " + this.nome + "\nGênero: " + this.genero + "\nAtor Principal: " + this.atorPrincipal +
                "\nClassificação Indicativa: " + this.classificacaoIndicativa + "+" + "\nTipo: " +this.tipo;
    }

    public Midia(){

    }

    public String getNome(){return this.nome;}
    public String getGenero(){return this.genero;}
    public String getAtorPrincipal(){return this.atorPrincipal;}
    public int getClassificacaoIndicativa(){return this.classificacaoIndicativa;}
    public String getTipo(){return this.tipo;}

    public void setNome(String nome) {this.nome=nome;}
    public void setGenero(String genero) {this.genero=genero;}
    public void setAtorPrincipal(String atorPrincipal) {this.atorPrincipal=atorPrincipal;}
    public void setClassificacaoIndicativa (int classificacaoIndicativa) {this.classificacaoIndicativa=classificacaoIndicativa;}
    public void setTipo (String tipo) {this.tipo=tipo;}


}
