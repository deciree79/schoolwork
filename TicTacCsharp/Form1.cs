using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace TicTacSsharp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
    }
 		private bool myTurn = true;
		private string toggle = "";
		private Button [,] buttonmatrix = new Button [3,3];
        public int[,] matrix = new int[3, 3];
       public void buttonmatrixa()
 //       {
            buttonmatrix.Text = " ";
            buttonmatrix.Height = 75;
            buttonmatrix.Width = 75;
            buttonmatrix.Top = 75;
            buttonmatrix.Left = 75;

            buttonmatrix.Click += new EventHandler(klick);

            this.Controls.Add(pushMeButton);
            this.Height = 200;
            this.Width = 200;
            this.StartPosition = FormStartPosition.CenterScreen;
            this.Visible = true;
   //     }
//		private Display display = new Display();
//		private Shell shell = new Shell(display);
		private int raknare=0;
		private bool win = false;
		private MessageBox messageBox = new MessageBox(System.EventArgs);
		private String price;

		// GridData gridData = new GridData(GridData.FILL_BOTH);
        //


		private void klick (object sender, EventArgs e) {
            Button b = (Button)sender;
			if (myTurn)
				b.Text("X");
			else
				b.Text("O");
			myTurn = !myTurn;
			Button.setEnabled(false);

			raknare++;
			winner();
			gameOver();
		}
		private void gameOver() {
			if (win == true){
				for (int i=0; i<3; i++)
					for (int k=0; k<3; k++)
						buttonmatrix[i,k].Enabled(false);
			}
		}

		//Vinst plan
		private void winner(){
			if (buttonmatrix[0,0].Text==buttonmatrix[0,1].Text&&buttonmatrix[0,1].Text==buttonmatrix[0,2].Text&&buttonmatrix[0,0].Text != ""){
					win = true;
				}
				else if (buttonmatrix[1,0].Text==buttonmatrix[1,1].Text&&buttonmatrix[1,1].Text==buttonmatrix[1,2].Text&&buttonmatrix[1,0].Text != ""){
					win = true;
				}
				else if (buttonmatrix[2,0].Text==buttonmatrix[2,1].Text&&buttonmatrix[2,1].Text==buttonmatrix[2,2].Text&&buttonmatrix[2,0].Text != ""){
					win = true;
				}
				else if (buttonmatrix[0,0].Text==buttonmatrix[1,0].Text&&buttonmatrix[1,0].Text==buttonmatrix[2,0].Text&&buttonmatrix[0,0].Text != ""){
					win = true;
				}
				else if (buttonmatrix[0,1].Text==buttonmatrix[1,1].Text&&buttonmatrix[1,1].Text==buttonmatrix[2,1].Text&&buttonmatrix[0,1].Text != ""){
					win = true;
				}
				else if (buttonmatrix[0,2].Text==buttonmatrix[1,2].Text&&buttonmatrix[1,2].Text==buttonmatrix[2,2].Text&&buttonmatrix[0,2].Text != ""){
					win = true;
				}
				else if (buttonmatrix[0,0].Text==buttonmatrix[1,1].Text&&buttonmatrix[1,1].Text==buttonmatrix[2,2].Text&&buttonmatrix[0,0].Text != ""){
					win = true;
				}
				else if (buttonmatrix[2,0].Text==buttonmatrix[1,1].Text&&buttonmatrix[1,1].Text==buttonmatrix[0,2].Text&&buttonmatrix[2,0].Text != ""){
					win = true;
				}


			//talar om vem som tryckte sist
			if(myTurn==true){
				price="O";
			}
			else if(myTurn==false){
				price="X";}


			//Visar resultat
				if(raknare == 9 && win == false){
					messageBox.Show("Det blev oavgjort",
						messageBoxButton.OK, MessageBoxIcon.Exclamation);
						}
				else if (win == true){
					messageBox.Show("Spelare "+price+" vann",
				messageBoxButton.OK, MessageBoxIcon.Exclamation);
                    }
}
}
}
}
