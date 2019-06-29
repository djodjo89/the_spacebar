package prog;
import java.io.IOException;
import java.net.DatagramPacket;
import java.net.UnknownHostException;
import java.util.ArrayList;

public class Jeu {
	
	private Connexion connexion ;
	private Tour tour;	
	private IA ia ;
	private int nbtour=0;
	
	public Jeu (String nomE, String ip, int port) throws UnknownHostException, IOException {
		this.ia = new IA (new Grille());
		this.connexion = new Connexion ("Montreuil2", 100) ;
		this.tour = new tour(this.ia)

	}

	public void jeu() throws IOException, InterruptedException {

		this.Connexion() ;
		while (nbtour<90) {
			this.tour() ;
			nbtour++;
		}

	}

}
