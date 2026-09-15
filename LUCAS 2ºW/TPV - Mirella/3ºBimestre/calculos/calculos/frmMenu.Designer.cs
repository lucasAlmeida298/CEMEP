
namespace calculos
{
    partial class frmMenu
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmMenu));
            this.toolStrip2 = new System.Windows.Forms.ToolStrip();
            this.StopToolStrip = new System.Windows.Forms.ToolStripButton();
            this.NotepadToolStrip = new System.Windows.Forms.ToolStripButton();
            this.CalculatorToolStrip = new System.Windows.Forms.ToolStripButton();
            this.MenuToolStrip = new System.Windows.Forms.ToolStripButton();
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.arquivoToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.sairToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.aplicativosToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.salárioBrutoToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.salárioLíquidoToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.impostoDeRendaToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.acessóriosToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.googleToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.calculadoraToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.excelToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.notepadToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.sobreToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.sistemaToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.desenvolvedorToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.statusStrip1 = new System.Windows.Forms.StatusStrip();
            this.toolStripStatusLabel1 = new System.Windows.Forms.ToolStripStatusLabel();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.tssData = new System.Windows.Forms.ToolStripStatusLabel();
            this.tssHora = new System.Windows.Forms.ToolStripStatusLabel();
            this.toolStrip2.SuspendLayout();
            this.menuStrip1.SuspendLayout();
            this.statusStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // toolStrip2
            // 
            this.toolStrip2.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.StopToolStrip,
            this.NotepadToolStrip,
            this.CalculatorToolStrip,
            this.MenuToolStrip});
            this.toolStrip2.Location = new System.Drawing.Point(0, 24);
            this.toolStrip2.Name = "toolStrip2";
            this.toolStrip2.Size = new System.Drawing.Size(800, 25);
            this.toolStrip2.TabIndex = 1;
            this.toolStrip2.Text = "toolStrip2";
            // 
            // StopToolStrip
            // 
            this.StopToolStrip.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image;
            this.StopToolStrip.Image = ((System.Drawing.Image)(resources.GetObject("StopToolStrip.Image")));
            this.StopToolStrip.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.StopToolStrip.Name = "StopToolStrip";
            this.StopToolStrip.Size = new System.Drawing.Size(23, 22);
            this.StopToolStrip.Text = "Sair";
            this.StopToolStrip.Click += new System.EventHandler(this.toolStripButton1_Click);
            // 
            // NotepadToolStrip
            // 
            this.NotepadToolStrip.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image;
            this.NotepadToolStrip.Image = ((System.Drawing.Image)(resources.GetObject("NotepadToolStrip.Image")));
            this.NotepadToolStrip.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.NotepadToolStrip.Name = "NotepadToolStrip";
            this.NotepadToolStrip.Size = new System.Drawing.Size(23, 22);
            this.NotepadToolStrip.Text = "Bloco de notas";
            this.NotepadToolStrip.Click += new System.EventHandler(this.NotepadToolStrip_Click);
            // 
            // CalculatorToolStrip
            // 
            this.CalculatorToolStrip.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image;
            this.CalculatorToolStrip.Image = ((System.Drawing.Image)(resources.GetObject("CalculatorToolStrip.Image")));
            this.CalculatorToolStrip.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.CalculatorToolStrip.Name = "CalculatorToolStrip";
            this.CalculatorToolStrip.Size = new System.Drawing.Size(23, 22);
            this.CalculatorToolStrip.Text = "Calculadora";
            this.CalculatorToolStrip.Click += new System.EventHandler(this.toolStripButton3_Click);
            // 
            // MenuToolStrip
            // 
            this.MenuToolStrip.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image;
            this.MenuToolStrip.Image = ((System.Drawing.Image)(resources.GetObject("MenuToolStrip.Image")));
            this.MenuToolStrip.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.MenuToolStrip.Name = "MenuToolStrip";
            this.MenuToolStrip.Size = new System.Drawing.Size(23, 22);
            this.MenuToolStrip.Text = "Desenvolvedor";
            this.MenuToolStrip.Click += new System.EventHandler(this.MenuToolStrip_Click);
            // 
            // menuStrip1
            // 
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.arquivoToolStripMenuItem,
            this.aplicativosToolStripMenuItem,
            this.acessóriosToolStripMenuItem,
            this.sobreToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Size = new System.Drawing.Size(800, 24);
            this.menuStrip1.TabIndex = 2;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // arquivoToolStripMenuItem
            // 
            this.arquivoToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.sairToolStripMenuItem});
            this.arquivoToolStripMenuItem.Name = "arquivoToolStripMenuItem";
            this.arquivoToolStripMenuItem.Size = new System.Drawing.Size(61, 20);
            this.arquivoToolStripMenuItem.Text = "Arquivo";
            // 
            // sairToolStripMenuItem
            // 
            this.sairToolStripMenuItem.Image = global::calculos.Properties.Resources.MSGBOX01;
            this.sairToolStripMenuItem.Name = "sairToolStripMenuItem";
            this.sairToolStripMenuItem.ShortcutKeys = ((System.Windows.Forms.Keys)((System.Windows.Forms.Keys.Control | System.Windows.Forms.Keys.W)));
            this.sairToolStripMenuItem.Size = new System.Drawing.Size(138, 22);
            this.sairToolStripMenuItem.Text = "Sair";
            this.sairToolStripMenuItem.Click += new System.EventHandler(this.sairToolStripMenuItem_Click);
            // 
            // aplicativosToolStripMenuItem
            // 
            this.aplicativosToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.salárioBrutoToolStripMenuItem,
            this.salárioLíquidoToolStripMenuItem,
            this.impostoDeRendaToolStripMenuItem});
            this.aplicativosToolStripMenuItem.Name = "aplicativosToolStripMenuItem";
            this.aplicativosToolStripMenuItem.Size = new System.Drawing.Size(77, 20);
            this.aplicativosToolStripMenuItem.Text = "Aplicativos";
            // 
            // salárioBrutoToolStripMenuItem
            // 
            this.salárioBrutoToolStripMenuItem.Name = "salárioBrutoToolStripMenuItem";
            this.salárioBrutoToolStripMenuItem.Size = new System.Drawing.Size(170, 22);
            this.salárioBrutoToolStripMenuItem.Text = "Salário Bruto";
            this.salárioBrutoToolStripMenuItem.Click += new System.EventHandler(this.salárioBrutoToolStripMenuItem_Click);
            // 
            // salárioLíquidoToolStripMenuItem
            // 
            this.salárioLíquidoToolStripMenuItem.Name = "salárioLíquidoToolStripMenuItem";
            this.salárioLíquidoToolStripMenuItem.Size = new System.Drawing.Size(170, 22);
            this.salárioLíquidoToolStripMenuItem.Text = "Salário Líquido";
            // 
            // impostoDeRendaToolStripMenuItem
            // 
            this.impostoDeRendaToolStripMenuItem.Name = "impostoDeRendaToolStripMenuItem";
            this.impostoDeRendaToolStripMenuItem.Size = new System.Drawing.Size(170, 22);
            this.impostoDeRendaToolStripMenuItem.Text = "Imposto de Renda";
            // 
            // acessóriosToolStripMenuItem
            // 
            this.acessóriosToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.googleToolStripMenuItem,
            this.calculadoraToolStripMenuItem,
            this.excelToolStripMenuItem,
            this.notepadToolStripMenuItem});
            this.acessóriosToolStripMenuItem.Name = "acessóriosToolStripMenuItem";
            this.acessóriosToolStripMenuItem.Size = new System.Drawing.Size(75, 20);
            this.acessóriosToolStripMenuItem.Text = "Acessórios";
            // 
            // googleToolStripMenuItem
            // 
            this.googleToolStripMenuItem.Name = "googleToolStripMenuItem";
            this.googleToolStripMenuItem.Size = new System.Drawing.Size(137, 22);
            this.googleToolStripMenuItem.Text = "Google";
            this.googleToolStripMenuItem.Click += new System.EventHandler(this.googleToolStripMenuItem_Click);
            // 
            // calculadoraToolStripMenuItem
            // 
            this.calculadoraToolStripMenuItem.Name = "calculadoraToolStripMenuItem";
            this.calculadoraToolStripMenuItem.Size = new System.Drawing.Size(137, 22);
            this.calculadoraToolStripMenuItem.Text = "Calculadora";
            this.calculadoraToolStripMenuItem.Click += new System.EventHandler(this.calculadoraToolStripMenuItem_Click);
            // 
            // excelToolStripMenuItem
            // 
            this.excelToolStripMenuItem.Name = "excelToolStripMenuItem";
            this.excelToolStripMenuItem.Size = new System.Drawing.Size(137, 22);
            this.excelToolStripMenuItem.Text = "Excel";
            this.excelToolStripMenuItem.Click += new System.EventHandler(this.excelToolStripMenuItem_Click);
            // 
            // notepadToolStripMenuItem
            // 
            this.notepadToolStripMenuItem.Name = "notepadToolStripMenuItem";
            this.notepadToolStripMenuItem.Size = new System.Drawing.Size(137, 22);
            this.notepadToolStripMenuItem.Text = "Notepad";
            this.notepadToolStripMenuItem.Click += new System.EventHandler(this.notepadToolStripMenuItem_Click);
            // 
            // sobreToolStripMenuItem
            // 
            this.sobreToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.sistemaToolStripMenuItem,
            this.desenvolvedorToolStripMenuItem});
            this.sobreToolStripMenuItem.Name = "sobreToolStripMenuItem";
            this.sobreToolStripMenuItem.Size = new System.Drawing.Size(49, 20);
            this.sobreToolStripMenuItem.Text = "Sobre";
            // 
            // sistemaToolStripMenuItem
            // 
            this.sistemaToolStripMenuItem.Name = "sistemaToolStripMenuItem";
            this.sistemaToolStripMenuItem.Size = new System.Drawing.Size(152, 22);
            this.sistemaToolStripMenuItem.Text = "Sistema";
            this.sistemaToolStripMenuItem.Click += new System.EventHandler(this.sistemaToolStripMenuItem_Click);
            // 
            // desenvolvedorToolStripMenuItem
            // 
            this.desenvolvedorToolStripMenuItem.Name = "desenvolvedorToolStripMenuItem";
            this.desenvolvedorToolStripMenuItem.Size = new System.Drawing.Size(152, 22);
            this.desenvolvedorToolStripMenuItem.Text = "Desenvolvedor";
            this.desenvolvedorToolStripMenuItem.Click += new System.EventHandler(this.desenvolvedorToolStripMenuItem_Click);
            // 
            // statusStrip1
            // 
            this.statusStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.toolStripStatusLabel1,
            this.tssData,
            this.tssHora});
            this.statusStrip1.Location = new System.Drawing.Point(0, 424);
            this.statusStrip1.Name = "statusStrip1";
            this.statusStrip1.Size = new System.Drawing.Size(800, 26);
            this.statusStrip1.TabIndex = 3;
            this.statusStrip1.Text = "statusStrip1";
            // 
            // toolStripStatusLabel1
            // 
            this.toolStripStatusLabel1.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.toolStripStatusLabel1.Name = "toolStripStatusLabel1";
            this.toolStripStatusLabel1.Size = new System.Drawing.Size(210, 21);
            this.toolStripStatusLabel1.Text = "Lucas Gabriel de Almeida";
            // 
            // timer1
            // 
            this.timer1.Enabled = true;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // tssData
            // 
            this.tssData.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.tssData.Name = "tssData";
            this.tssData.Size = new System.Drawing.Size(56, 21);
            this.tssData.Text = "DATA";
            this.tssData.Click += new System.EventHandler(this.toolStripStatusLabel2_Click);
            // 
            // tssHora
            // 
            this.tssHora.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.tssHora.Name = "tssHora";
            this.tssHora.Size = new System.Drawing.Size(58, 21);
            this.tssHora.Text = "HORA";
            // 
            // frmMenu
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ControlLight;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.statusStrip1);
            this.Controls.Add(this.toolStrip2);
            this.Controls.Add(this.menuStrip1);
            this.MainMenuStrip = this.menuStrip1;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "frmMenu";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Menu";
            this.Load += new System.EventHandler(this.toolStripButton3_Click);
            this.toolStrip2.ResumeLayout(false);
            this.toolStrip2.PerformLayout();
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.statusStrip1.ResumeLayout(false);
            this.statusStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.ToolStrip toolStrip2;
        private System.Windows.Forms.ToolStripButton StopToolStrip;
        private System.Windows.Forms.ToolStripButton NotepadToolStrip;
        private System.Windows.Forms.ToolStripButton CalculatorToolStrip;
        private System.Windows.Forms.ToolStripButton MenuToolStrip;
        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem arquivoToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem sairToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem aplicativosToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem acessóriosToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem sobreToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem salárioBrutoToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem salárioLíquidoToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem impostoDeRendaToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem googleToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem calculadoraToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem excelToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem notepadToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem sistemaToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem desenvolvedorToolStripMenuItem;
        private System.Windows.Forms.StatusStrip statusStrip1;
        private System.Windows.Forms.ToolStripStatusLabel toolStripStatusLabel1;
        private System.Windows.Forms.ToolStripStatusLabel tssData;
        private System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.ToolStripStatusLabel tssHora;
    }
}