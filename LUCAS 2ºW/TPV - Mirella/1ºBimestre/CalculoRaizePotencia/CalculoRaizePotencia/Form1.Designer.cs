
namespace CalculoRaizePotencia
{
    partial class Form1
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.lbl1 = new System.Windows.Forms.Label();
            this.txtn1 = new System.Windows.Forms.TextBox();
            this.lbl2 = new System.Windows.Forms.Label();
            this.lbl3 = new System.Windows.Forms.Label();
            this.lbl4 = new System.Windows.Forms.Label();
            this.txtR = new System.Windows.Forms.TextBox();
            this.txtP = new System.Windows.Forms.TextBox();
            this.btnlimpar = new System.Windows.Forms.Button();
            this.btnsair = new System.Windows.Forms.Button();
            this.btnCalcular = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // lbl1
            // 
            this.lbl1.AutoSize = true;
            this.lbl1.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl1.ForeColor = System.Drawing.Color.Blue;
            this.lbl1.Location = new System.Drawing.Point(167, 91);
            this.lbl1.Name = "lbl1";
            this.lbl1.Size = new System.Drawing.Size(127, 16);
            this.lbl1.TabIndex = 0;
            this.lbl1.Text = "Digite um número:";
            // 
            // txtn1
            // 
            this.txtn1.Location = new System.Drawing.Point(300, 89);
            this.txtn1.Name = "txtn1";
            this.txtn1.Size = new System.Drawing.Size(163, 20);
            this.txtn1.TabIndex = 1;
            // 
            // lbl2
            // 
            this.lbl2.AutoSize = true;
            this.lbl2.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl2.ForeColor = System.Drawing.Color.Blue;
            this.lbl2.Location = new System.Drawing.Point(43, 251);
            this.lbl2.Name = "lbl2";
            this.lbl2.Size = new System.Drawing.Size(82, 16);
            this.lbl2.TabIndex = 3;
            this.lbl2.Text = "Resultados:";
            // 
            // lbl3
            // 
            this.lbl3.AutoSize = true;
            this.lbl3.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl3.ForeColor = System.Drawing.Color.Blue;
            this.lbl3.Location = new System.Drawing.Point(43, 302);
            this.lbl3.Name = "lbl3";
            this.lbl3.Size = new System.Drawing.Size(39, 16);
            this.lbl3.TabIndex = 4;
            this.lbl3.Text = "Raiz:";
            // 
            // lbl4
            // 
            this.lbl4.AutoSize = true;
            this.lbl4.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl4.ForeColor = System.Drawing.Color.Blue;
            this.lbl4.Location = new System.Drawing.Point(531, 302);
            this.lbl4.Name = "lbl4";
            this.lbl4.Size = new System.Drawing.Size(68, 16);
            this.lbl4.TabIndex = 5;
            this.lbl4.Text = "Potência:";
            // 
            // txtR
            // 
            this.txtR.Location = new System.Drawing.Point(46, 321);
            this.txtR.Name = "txtR";
            this.txtR.Size = new System.Drawing.Size(163, 20);
            this.txtR.TabIndex = 6;
            // 
            // txtP
            // 
            this.txtP.Location = new System.Drawing.Point(534, 321);
            this.txtP.Name = "txtP";
            this.txtP.Size = new System.Drawing.Size(163, 20);
            this.txtP.TabIndex = 7;
            // 
            // btnlimpar
            // 
            this.btnlimpar.BackColor = System.Drawing.Color.WhiteSmoke;
            this.btnlimpar.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnlimpar.ImageAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btnlimpar.Location = new System.Drawing.Point(217, 399);
            this.btnlimpar.Name = "btnlimpar";
            this.btnlimpar.Size = new System.Drawing.Size(121, 39);
            this.btnlimpar.TabIndex = 8;
            this.btnlimpar.Text = "Limpar";
            this.btnlimpar.UseVisualStyleBackColor = false;
            this.btnlimpar.Click += new System.EventHandler(this.btnlimpar_Click);
            // 
            // btnsair
            // 
            this.btnsair.BackColor = System.Drawing.Color.WhiteSmoke;
            this.btnsair.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnsair.ImageAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btnsair.Location = new System.Drawing.Point(457, 399);
            this.btnsair.Name = "btnsair";
            this.btnsair.Size = new System.Drawing.Size(121, 39);
            this.btnsair.TabIndex = 9;
            this.btnsair.Text = "Sair";
            this.btnsair.UseVisualStyleBackColor = false;
            this.btnsair.Click += new System.EventHandler(this.btnsair_Click);
            // 
            // btnCalcular
            // 
            this.btnCalcular.BackColor = System.Drawing.Color.LightGray;
            this.btnCalcular.Font = new System.Drawing.Font("Century Gothic", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCalcular.Image = global::CalculoRaizePotencia.Properties.Resources.GRAPH03;
            this.btnCalcular.ImageAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btnCalcular.Location = new System.Drawing.Point(314, 176);
            this.btnCalcular.Name = "btnCalcular";
            this.btnCalcular.Size = new System.Drawing.Size(121, 39);
            this.btnCalcular.TabIndex = 2;
            this.btnCalcular.Text = "Calcular";
            this.btnCalcular.UseVisualStyleBackColor = false;
            this.btnCalcular.Click += new System.EventHandler(this.btnCalcular_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.LightSteelBlue;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.btnsair);
            this.Controls.Add(this.btnlimpar);
            this.Controls.Add(this.txtP);
            this.Controls.Add(this.txtR);
            this.Controls.Add(this.lbl4);
            this.Controls.Add(this.lbl3);
            this.Controls.Add(this.lbl2);
            this.Controls.Add(this.btnCalcular);
            this.Controls.Add(this.txtn1);
            this.Controls.Add(this.lbl1);
            this.ForeColor = System.Drawing.Color.Blue;
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Form1";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lbl1;
        private System.Windows.Forms.TextBox txtn1;
        private System.Windows.Forms.Button btnCalcular;
        private System.Windows.Forms.Label lbl2;
        private System.Windows.Forms.Label lbl3;
        private System.Windows.Forms.Label lbl4;
        private System.Windows.Forms.TextBox txtR;
        private System.Windows.Forms.TextBox txtP;
        private System.Windows.Forms.Button btnlimpar;
        private System.Windows.Forms.Button btnsair;
    }
}

