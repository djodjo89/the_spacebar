package prog;

import java.util.ArrayList;

public class IA {
	
	private Grille grille;
	private ArrayList<String> propositions;
	private int nbGraines ;
	private String coup;
	private int[][] memoire;
	private int tour;

	public IA(Grille grille) {
		this.propositions = new ArrayList<String>();
		this.nbGraines = 28; 
		this.grille = grille ;
		this.memoire = new int [2][2];
	}
	
	public void enregistrerCoup() {
	}
	
	
	public void calculCoupsPossibles (Integer[] coordonnees) {
		this.propositions.clear() ;
		if ((this.grille.getGrille(coordonnees[0], coordonnees[1])) == 'M') {
			break;
		}
		else if ((this.grille.getGrille(coordonnees[0], coordonnees[1])) == 'F') 
			break;
		else if ((this.grille.getGrille(coordonnees[0], coordonnees[1]) == this.grille.getGrille(memoire[0][0], memoire[0][1])
				) || (this.grille.getGrille(coordonnees[0], coordonnees[1]) == this.grille.getGrille(memoire[1][0], memoire[1][1])
						)) {
			break;
		}
		else if (coordonne[0] == memoire[0][0] || coordonne[1] == memoire[0][1]) {
			this.propositions.add(convertion(coordonnees[0])+":"+coordonnees[1]);
			break;
		}
		else
			break;
			
	}

	public char convertion (int x) {
		if (x==0)
			return 'A';
		else if (x==1)
			return 'B';
		else if (x==2)
			return 'C';
		else if (x==3)
			return 'D';
		else if (x==4)
			return 'E';
		else if (x==5)
			return 'F';
		else if (x==6)
			return 'G';
		else if (x==7)
			return 'H';
		else if (x==8)
			return 'I';
		else if (x==9)
			return 'j';
	}
	
	public String calculCoupRandom(){
		String mule = this.propositions.get(0);
		this.propositions.remove(0);
		return mule;
	}
}

