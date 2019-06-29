

public class Grille {
	private String[] lignes ; // 'T' : terre, 'O' : obstacle
	private int[][] grilleInt;
	private char[][] grilleChar ;
	
	public Grille (String map) {
		
		this.lignes = map.split("|");
		
		this.grilleInt = new int[this.lignes.length][this.lignes.length];
		
		for(int i = 0; i < this.lignes.length; i++) {
			
			for(int j = 0; j < this.lignes[i].length(); j++) {
					
				this.grilleInt[i][j] = Integer.parseInt(this.lignes[i].split(":")[j]);
					
			}
		}
		
	}
	

	public void afficherMap() {
		
		for (int i=0; i<this.grilleInt.length; i++) {
			
			for (int j=0; j<this.grilleInt[0].length; j++) {
				
				System.out.print(this.grilleInt[i][j]);
				
			}
			
			System.out.println();
			
		}
		
	}

	public char getGrille(int x, int y) {
		return this.grilleChar[x][y];
	}

}