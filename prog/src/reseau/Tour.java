package prog;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.net.Socket;
import java.net.SocketException;
import java.net.UnknownHostException;

public class Tour implements Runnable {
	public final static int port = 8004;
	private String name;
	private IA ia;
	public Tour() {
		this.ia = new Grille();
}

	public void run(){
		int[] co = new int [2];
			try {
				DatagramSocket client = new DatagramSocket();
				DatagramSocket packet2 = new DatagramSocket();
				InetAddress adresse = InetAddress.getByName("172.16.97.13"),
				byte[] buffer2 = new byte[8196];
				DatagramPacket packet2 = new DatagramPacket(buffer2, buffer2.length, adresse, port);
				client.receive(packet2);
				System.out.println(new String(packet2.getData()));

				for(int i = 0, i<10, i++)
					for(int j = 0, j<10, j++)
						ia.calculCoupsPossibles(co[i][j]);
				String envoi = ia.calculCoupRAndom();
				byte[] buffer = envoi.getBytes();
				DatagramPacket packet = new DatagramPacket(buffer, buffer.length, adresse, port);
				packet.setData(buffer);
				client.send(packet);

				} catch (SocketException e) {
					e.printStackTrace();

				} catch (UnknownHostException e) {
					e.printStackTrace();
				} catch (IOException e) {
					e.printStackTrace();
				}
		}
}