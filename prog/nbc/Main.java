package prog;

import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.net.Socket;

import reseau.Connexion;

public class Main {

	public static void main(String[] args) throws IOException {

		String ip ;
		int port ;

		ip = "172.16.97.13" ;
		port = 8001;
		
		String nomEquipe = "EquipeMontreuil2" ;
		
		try {
			DatagramSocket serveur = new DatagramSocket (port) ;
			while (true) {
				System.out.println("coucou");
				byte[] buffer = new byte[8192] ;
				DatagramPacket packet = new DatagramPacket (buffer, buffer.length) ;
				serveur.receive(packet);
				String texte = new String (packet.getData()) ;
				System.out.println("Re�u de la part de : " + packet.getPort()) ;
				packet.setLength(buffer.length);
				
				byte[] buffer2 = new String ("R�ponse").getBytes() ;
				DatagramPacket packet2 = new DatagramPacket (buffer2, buffer2.length, packet.getAddress(), packet.getPort()) ;
				serveur.send(packet2);
				packet2.setLength(buffer2.length);
			}
			
		} catch (Exception e) {
			
			e.printStackTrace() ;
			
		}

	}

}
