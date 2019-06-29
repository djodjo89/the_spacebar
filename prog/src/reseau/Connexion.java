package reseau;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.net.Socket;
import java.net.SocketException;
import java.net.UnknownHostException;

	public class Connexion implements Runnable{
		private InetAddress adresse;
		private String name;
		private long sleepTime;
		public final static int port = 8004;

		public Connexion(String pName, long sleep){
			name = pName;
			sleepTime = sleep;
		}

		public void run(){
			int nbre = 0;
			while(true){
				String envoi = name;
				byte[] buffer = envoi.getBytes();

				try {
					//On initialise la connexion côté client
					DatagramSocket client = new DatagramSocket();

					//On crée notre datagramme
					InetAddress adresse = InetAddress.getByName("172.16.97.13");
					DatagramPacket packet = new DatagramPacket(buffer, buffer.length, adresse, port);

					//On lui affecte les données à envoyer
					packet.setData(buffer);

					//On envoie au serveur
					client.send(packet);

					//Et on récupère la réponse du serveur
					byte[] buffer2 = new byte[8196];
					DatagramPacket packet2 = new DatagramPacket(buffer2, buffer2.length, adresse, port);
					client.receive(packet2);
					System.out.print(envoi + " a reçu une réponse du serveur : ");
					System.out.println(new String(packet2.getData()));



					//Et on récupère la map
					byte[] buffer3 = new byte[8196];
					DatagramPacket packet3 = new DatagramPacket(buffer3, buffer3.length, adresse, port);
					client.receive(packet3);
					System.out.print(envoi + " a reçu une réponse du serveur : ");
					System.out.println(new String(packet3.getData()));


					try {
						Thread.sleep(sleepTime);

					} catch (InterruptedException e) {
						e.printStackTrace();
					}

				} catch (SocketException e) {
					e.printStackTrace();

				} catch (UnknownHostException e) {
					e.printStackTrace();
				} catch (IOException e) {
					e.printStackTrace();
				}
			}
		}      
	}   
