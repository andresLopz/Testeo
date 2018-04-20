/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package exaprac2;

import javax.swing.JOptionPane;

/**
 *
 * @author andres
 */
public class practico2 {
    
    public static void main(String[] args) {
        
        int cantart=0;   
        int opcion=0;
        int reiniciar;
        int repArt = 0;
        double suma=0;
        double iva=0;
        double totalizado=0;
        
        double[] cant= new double[10];
        double[] precio= new double[10];
        String[] producto= new String[10];
    

         
         do{
        opcion=Integer.parseInt(JOptionPane.showInputDialog(null,"ELIGA UNA OPCION:"
                                                                  +"\n1---Agregar compra"
                                                                  +"\n2---Ver compras"
                                                                  +"\n3---Salir"
        ));
      
        if(opcion==1){
            
            cantart=Integer.parseInt(JOptionPane.showInputDialog(null,"Cantidad de rticulos comprados:"));
            
              if(cantart<=10){
              for (int ingresar = 0; ingresar < cantart+repArt; ingresar++) {
                  producto[ingresar]=JOptionPane.showInputDialog("Ingrese el nombre del producto: ");
                  cant[ingresar]=Integer.parseInt(JOptionPane.showInputDialog("Ingrese la cantidad de producto: "));
                  precio[ingresar]=Double.parseDouble(JOptionPane.showInputDialog("Ingrese el precio del producto: "));
                  
            }
              repArt += cantart;
           }
    } 
       
        if(opcion==2){
            if(repArt!=0){
                    for (int mostrar = 0; mostrar  < 10; mostrar++) {
                        if(precio[mostrar] != 0){
                        JOptionPane.showMessageDialog(null,"Producto: "+producto[mostrar]
                                                                       +"\nCantidad:"+cant[mostrar]
                                                                       +"\nPrecio:"+precio[mostrar] );
                        suma=cant[mostrar]*precio[mostrar];
                        iva=suma*0.13;
                        totalizado=suma+iva;
                        JOptionPane.showMessageDialog(null,"Total de compra es: "+totalizado);
                        }

                    }
            }else{
            JOptionPane.showMessageDialog(null, "Sin datos");
            
            }
                
        }
        if(opcion==3){
        System.exit(0);
        }
        reiniciar=JOptionPane.showConfirmDialog(null, "Volver al menu","Continuar",JOptionPane.YES_NO_OPTION);
        }while(reiniciar==JOptionPane.YES_OPTION);
  }
}
