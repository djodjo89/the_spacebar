

public class Joueur {
	
	private int num ;
	
	private boolean estVivant ;
	
	private char couleur ;
	
	private Integer[] position ;
	
	public Joueur () {
		
		this.estVivant = true ;
		this.position = new Integer[2] ;
		
	}
	
	public Integer[] getPosition () {
		
		return this.position ;
		
	}
	
	public void setPosition (String positionE) {
		
		this.position[0] = Integer.parseInt((positionE.split(":")[0])) ;
		this.position[1] = Integer.parseInt((positionE.split(":")[1])) ;
		
	}
	
	public void setPositionInt (Integer[] nvPos) {
		
		this.position[0] = nvPos[0] ;
		this.position[1] = nvPos[1] ;
		
	}
	
	public void setCouleur (char couleur) {
		
		this.couleur = couleur ;
		
	}
	
	public char getCouleur () {
		
		return this.couleur ;
		
	}
	
	public void setNum (int numE) {
		
		this.num = numE ;
		
	}
	
	public int getNum () {
		
		return this.num ;
		
	}
	
	public void tuer () {
		
		this.estVivant = false ;
		
	}
	
	public boolean estVivant () {
		
		return this.estVivant ;
		
	}

}
