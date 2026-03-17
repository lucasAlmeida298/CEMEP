
namespace lucas_Media
{
    partial class txtmedia
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(txtmedia));
            this.lbln1 = new System.Windows.Forms.Label();
            this.frmMedia = new System.Windows.Forms.Label();
            this.txt1 = new System.Windows.Forms.TextBox();
            this.txt2 = new System.Windows.Forms.TextBox();
            this.lbl3 = new System.Windows.Forms.Label();
            this.lblResultado = new System.Windows.Forms.Label();
            this.btnlimpar = new System.Windows.Forms.Button();
            this.btnsair = new System.Windows.Forms.Button();
            this.bntcalcular = new System.Windows.Forms.Button();
            this.lbl4 = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // lbln1
            // 
            this.lbln1.AutoSize = true;
            this.lbln1.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbln1.Location = new System.Drawing.Point(171, 37);
            this.lbln1.Name = "lbln1";
            this.lbln1.Size = new System.Drawing.Size(239, 25);
            this.lbln1.TabIndex = 0;
            this.lbln1.Text = "Digite a primeira nota:";
            // 
            // frmMedia
            // 
            this.frmMedia.AutoSize = true;
            this.frmMedia.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.frmMedia.Location = new System.Drawing.Point(171, 78);
            this.frmMedia.Name = "frmMedia";
            this.frmMedia.Size = new System.Drawing.Size(244, 25);
            this.frmMedia.TabIndex = 1;
            this.frmMedia.Text = "Digite a segunda nota:";
            // 
            // txt1
            // 
            this.txt1.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt1.Location = new System.Drawing.Point(431, 41);
            this.txt1.Name = "txt1";
            this.txt1.Size = new System.Drawing.Size(100, 23);
            this.txt1.TabIndex = 2;
            // 
            // txt2
            // 
            this.txt2.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt2.Location = new System.Drawing.Point(431, 82);
            this.txt2.Name = "txt2";
            this.txt2.Size = new System.Drawing.Size(100, 23);
            this.txt2.TabIndex = 3;
            // 
            // lbl3
            // 
            this.lbl3.AutoSize = true;
            this.lbl3.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl3.Location = new System.Drawing.Point(255, 219);
            this.lbl3.Name = "lbl3";
            this.lbl3.Size = new System.Drawing.Size(123, 25);
            this.lbl3.TabIndex = 5;
            this.lbl3.Text = "a média é:";
            // 
            // lblResultado
            // 
            this.lblResultado.AutoSize = true;
            this.lblResultado.BackColor = System.Drawing.SystemColors.ButtonHighlight;
            this.lblResultado.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblResultado.ForeColor = System.Drawing.Color.Black;
            this.lblResultado.Location = new System.Drawing.Point(384, 225);
            this.lblResultado.Name = "lblResultado";
            this.lblResultado.Size = new System.Drawing.Size(0, 19);
            this.lblResultado.TabIndex = 6;
            // 
            // btnlimpar
            // 
            this.btnlimpar.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnlimpar.ForeColor = System.Drawing.Color.Black;
            this.btnlimpar.Image = global::lucas_Media.Properties.Resources.WASTE;
            this.btnlimpar.ImageAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btnlimpar.Location = new System.Drawing.Point(185, 334);
            this.btnlimpar.Name = "btnlimpar";
            this.btnlimpar.Size = new System.Drawing.Size(115, 30);
            this.btnlimpar.TabIndex = 8;
            this.btnlimpar.Text = "Limpar";
            this.btnlimpar.UseVisualStyleBackColor = true;
            this.btnlimpar.Click += new System.EventHandler(this.btnlimpar_Click);
            // 
            // btnsair
            // 
            this.btnsair.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnsair.ForeColor = System.Drawing.Color.Black;
            this.btnsair.Image = global::lucas_Media.Properties.Resources.MSGBOX01;
            this.btnsair.ImageAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btnsair.Location = new System.Drawing.Point(431, 334);
            this.btnsair.Name = "btnsair";
            this.btnsair.Size = new System.Drawing.Size(115, 30);
            this.btnsair.TabIndex = 7;
            this.btnsair.Text = "Sair";
            this.btnsair.UseVisualStyleBackColor = true;
            this.btnsair.Click += new System.EventHandler(this.btnsair_Click);
            // 
            // bntcalcular
            // 
            this.bntcalcular.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.bntcalcular.ForeColor = System.Drawing.Color.Black;
            this.bntcalcular.Image = global::lucas_Media.Properties.Resources.GRAPH07;
            this.bntcalcular.ImageAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.bntcalcular.Location = new System.Drawing.Point(293, 131);
            this.bntcalcular.Name = "bntcalcular";
            this.bntcalcular.Size = new System.Drawing.Size(115, 30);
            this.bntcalcular.TabIndex = 4;
            this.bntcalcular.Text = "Calcular";
            this.bntcalcular.UseVisualStyleBackColor = true;
            this.bntcalcular.Click += new System.EventHandler(this.bntcalcular_Click);
            // 
            // lbl4
            // 
            this.lbl4.AutoSize = true;
            this.lbl4.Font = new System.Drawing.Font("Century Gothic", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl4.Location = new System.Drawing.Point(255, 416);
            this.lbl4.Name = "lbl4";
            this.lbl4.Size = new System.Drawing.Size(253, 25);
            this.lbl4.TabIndex = 9;
            this.lbl4.Text = "Desenvolvido por Lucas";
            // 
            // txtmedia
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.CadetBlue;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.lbl4);
            this.Controls.Add(this.btnlimpar);
            this.Controls.Add(this.btnsair);
            this.Controls.Add(this.lblResultado);
            this.Controls.Add(this.lbl3);
            this.Controls.Add(this.bntcalcular);
            this.Controls.Add(this.txt2);
            this.Controls.Add(this.txt1);
            this.Controls.Add(this.frmMedia);
            this.Controls.Add(this.lbln1);
            this.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "txtmedia";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Média";
            this.Load += new System.EventHandler(this.txtmedia_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lbln1;
        private System.Windows.Forms.Label frmMedia;
        private System.Windows.Forms.TextBox txt1;
        private System.Windows.Forms.TextBox txt2;
        private System.Windows.Forms.Button bntcalcular;
        private System.Windows.Forms.Label lbl3;
        private System.Windows.Forms.Label lblResultado;
        private System.Windows.Forms.Button btnsair;
        private System.Windows.Forms.Button btnlimpar;
        private System.Windows.Forms.Label lbl4;
    }
}

