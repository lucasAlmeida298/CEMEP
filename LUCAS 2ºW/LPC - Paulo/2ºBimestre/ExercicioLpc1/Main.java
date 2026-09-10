public class Main {
    public static void main(String[] args) {
        Midia objMidia1 = new Midia("Michael","Drama bigráfico / Musical",
                "Jaafar Jackson", 14,"Série");

        Midia objMidia2 = new Midia("Homem-Aranha Um Novo Dia", "Terror Piscológico",
                "Tom Holland", 12,"Filme");

        Midia objMidia3 = new Midia("Vingadores Fracos","Ação / Ficção Científica / Super-herói",
                "Robert Downey Jr.",12,"Filme");

        Midia objMidia4 = new Midia("Superman","Ação / Aventura / Ficação Científica / Super-herói",
                "David Corenswet",18,"Filme");

        Midia objMidia5 = new Midia("Venom 3: A Última Rodada","Ação / Aventura / Ficção Científica / Super-herói",
                "Tom Cruise",14,"Filme");

        objMidia1.setTipo("Filme");
        objMidia2.setGenero("Ação / Aventura / Ficção Científica");
        objMidia3.setNome("Vingadores Ultimato");
        objMidia4.setClassificacaoIndicativa(14);
        objMidia5.setAtorPrincipal("Tom Hardy");

        System.out.println("-----------------------------------------");
        System.out.println(objMidia1.toString());
        System.out.println("-----------------------------------------");
        System.out.println(objMidia2.toString());
        System.out.println("-----------------------------------------");
        System.out.println(objMidia3.toString());
        System.out.println("-----------------------------------------");
        System.out.println(objMidia4.toString());
        System.out.println("-----------------------------------------");
        System.out.println(objMidia5.toString());
    }
}
